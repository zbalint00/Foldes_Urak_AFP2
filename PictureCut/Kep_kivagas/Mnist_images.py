import numpy as np
import struct

with open('Source/t10k-images.idx3-ubyte','rb') as file: #fájl elérési útja
    magic, size = struct.unpack(">II", file.read(8))
    nrows, ncols = struct.unpack(">II", file.read(8))
    data = np.fromfile(file, dtype=np.dtype(np.uint8).newbyteorder('>'))
    data = data.reshape((size, nrows, ncols))

import gzip
import numpy as np
import matplotlib.pyplot as plt
f = gzip.open('Source/t10k-labels-idx1-ubyte.gz','r')
f.read(8)
for i in range(0,10):
    buf = f.read(1)
    labels = np.frombuffer(buf, dtype=np.uint8).astype(np.int64)
    plt.imshow(data[i, :, :], cmap='gray')
    plt.savefig('Images/num_' + str(i + 1) + '_' + str(labels) + '' + '.png')
